class Solution:
    def two_sum(self, nums:list[int], target:int)->list[int]:
        left = 0
        right = len(nums) - 1
        ret = [0,0]

        while( left < right ):
            if target == nums[left] + nums[right]:
                ret = [left+1, right+1]
                break

            if target > nums[left] + nums[right]:
                left += 1
            else:
                right -= 1

        return ret

numbers = [2,7,11,15]
target = 9
sol = Solution()
ans = sol.two_sum(numbers, target)
print(ans)
