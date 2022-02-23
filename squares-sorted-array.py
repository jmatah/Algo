class Solution:
    def sortedSquares(self, nums: list[int]) -> list[int]:
        ret = [0 for x in nums]
        res = [0 for x in nums]
        left = 0
        right = len(nums) - 1
        index = len(nums) - 1

        while index >= 0:
            print(index)
            if abs( nums[left]) > abs(nums[right]):
                ret[index] = nums[left] * nums[left]
                left += 1
            else:
                ret[index] = nums[right] * nums[right]
                right -= 1
            index -= 1

        for i in range(len(nums)):
            res[i] = ret[i]

        return res

nums = [-7,-3,2,3,11] #[-4,-1,0,3,10]
sol = Solution()
ret = sol.sortedSquares(nums)
print(ret)