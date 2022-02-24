class Solution:
    def twoSum(self, numbers: list[int], target: int) -> list[int]:
        ret = [0,0]
        for i in range( len(numbers)):
            for j in range( i+1, len( numbers)):
                if numbers[i] + numbers[j] == target:
                    ret = [i+1, j+1]
                    break
            else:
                continue
            break
        return ret

numbers = [2,11,15,7]
target = 9

sol = Solution()
ret = sol.twoSum( numbers, target )

print( ret )